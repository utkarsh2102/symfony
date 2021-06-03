<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\Tests\Firewall;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Firewall\AbstractPreAuthenticatedListener;

class AbstractPreAuthenticatedListenerTest extends TestCase
{
    public function testHandleWithValidValues()
    {
        $userCredentials = ['TheUser', 'TheCredentials'];

        $request = new Request([], [], [], [], [], []);

        $token = $this->createMock(TokenInterface::class);

        $tokenStorage = $this->createMock(TokenStorageInterface::class);
        $tokenStorage
            ->expects($this->any())
            ->method('getToken')
            ->willReturn(null)
        ;
        $tokenStorage
            ->expects($this->once())
            ->method('setToken')
            ->with($this->equalTo($token))
        ;

        $authenticationManager = $this->createMock(AuthenticationManagerInterface::class);
        $authenticationManager
            ->expects($this->once())
            ->method('authenticate')
            ->with($this->isInstanceOf(PreAuthenticatedToken::class))
            ->willReturn($token)
        ;

        $listener = $this->getMockForAbstractClass(AbstractPreAuthenticatedListener::class, [
            $tokenStorage,
            $authenticationManager,
            'TheProviderKey',
        ]);
        $listener
            ->expects($this->once())
            ->method('getPreAuthenticatedData')
            ->willReturn($userCredentials);

        $event = $this->createMock(RequestEvent::class);
        $event
            ->expects($this->any())
            ->method('getRequest')
            ->willReturn($request)
        ;

        $listener($event);
    }

    public function testHandleWhenAuthenticationFails()
    {
        $userCredentials = ['TheUser', 'TheCredentials'];

        $request = new Request([], [], [], [], [], []);

        $tokenStorage = $this->createMock(TokenStorageInterface::class);
        $tokenStorage
            ->expects($this->any())
            ->method('getToken')
            ->willReturn(null)
        ;
        $tokenStorage
            ->expects($this->never())
            ->method('setToken')
        ;

        $exception = new AuthenticationException('Authentication failed.');
        $authenticationManager = $this->createMock(AuthenticationManagerInterface::class);
        $authenticationManager
            ->expects($this->once())
            ->method('authenticate')
            ->with($this->isInstanceOf(PreAuthenticatedToken::class))
            ->willThrowException($exception)
        ;

        $listener = $this->getMockForAbstractClass(
            AbstractPreAuthenticatedListener::class, [
            $tokenStorage,
            $authenticationManager,
            'TheProviderKey',
        ]);
        $listener
            ->expects($this->once())
            ->method('getPreAuthenticatedData')
            ->willReturn($userCredentials);

        $event = $this->createMock(RequestEvent::class);
        $event
            ->expects($this->any())
            ->method('getRequest')
            ->willReturn($request)
        ;

        $listener($event);
    }

    public function testHandleWhenAuthenticationFailsWithDifferentToken()
    {
        $userCredentials = ['TheUser', 'TheCredentials'];

        $token = new UsernamePasswordToken('TheUsername', 'ThePassword', 'TheProviderKey', ['ROLE_FOO']);

        $request = new Request([], [], [], [], [], []);

        $tokenStorage = $this->createMock(TokenStorageInterface::class);
        $tokenStorage
            ->expects($this->any())
            ->method('getToken')
            ->willReturn($token)
        ;
        $tokenStorage
            ->expects($this->never())
            ->method('setToken')
        ;

        $exception = new AuthenticationException('Authentication failed.');
        $authenticationManager = $this->createMock(AuthenticationManagerInterface::class);
        $authenticationManager
            ->expects($this->once())
            ->method('authenticate')
            ->with($this->isInstanceOf(PreAuthenticatedToken::class))
            ->willThrowException($exception)
        ;

        $listener = $this->getMockForAbstractClass(
            AbstractPreAuthenticatedListener::class, [
            $tokenStorage,
            $authenticationManager,
            'TheProviderKey',
        ]);
        $listener
            ->expects($this->once())
            ->method('getPreAuthenticatedData')
            ->willReturn($userCredentials);

        $event = $this->createMock(RequestEvent::class);
        $event
            ->expects($this->any())
            ->method('getRequest')
            ->willReturn($request)
        ;

        $listener($event);
    }

    public function testHandleWithASimilarAuthenticatedToken()
    {
        $userCredentials = ['TheUser', 'TheCredentials'];

        $request = new Request([], [], [], [], [], []);

        $token = new PreAuthenticatedToken('TheUser', 'TheCredentials', 'TheProviderKey', ['ROLE_FOO']);

        $tokenStorage = $this->createMock(TokenStorageInterface::class);
        $tokenStorage
            ->expects($this->any())
            ->method('getToken')
            ->willReturn($token)
        ;

        $authenticationManager = $this->createMock(AuthenticationManagerInterface::class);
        $authenticationManager
            ->expects($this->never())
            ->method('authenticate')
        ;

        $listener = $this->getMockForAbstractClass(
            AbstractPreAuthenticatedListener::class, [
            $tokenStorage,
            $authenticationManager,
            'TheProviderKey',
        ]);
        $listener
            ->expects($this->once())
            ->method('getPreAuthenticatedData')
            ->willReturn($userCredentials);

        $event = $this->createMock(RequestEvent::class);
        $event
            ->expects($this->any())
            ->method('getRequest')
            ->willReturn($request)
        ;

        $listener($event);
    }

    public function testHandleWithAnInvalidSimilarToken()
    {
        $userCredentials = ['TheUser', 'TheCredentials'];

        $request = new Request([], [], [], [], [], []);

        $token = new PreAuthenticatedToken('AnotherUser', 'TheCredentials', 'TheProviderKey', ['ROLE_FOO']);

        $tokenStorage = $this->createMock(TokenStorageInterface::class);
        $tokenStorage
            ->expects($this->any())
            ->method('getToken')
            ->willReturn($token)
        ;
        $tokenStorage
            ->expects($this->once())
            ->method('setToken')
            ->with($this->equalTo(null))
        ;

        $exception = new AuthenticationException('Authentication failed.');
        $authenticationManager = $this->createMock(AuthenticationManagerInterface::class);
        $authenticationManager
            ->expects($this->once())
            ->method('authenticate')
            ->with($this->isInstanceOf(PreAuthenticatedToken::class))
            ->willThrowException($exception)
        ;

        $listener = $this->getMockForAbstractClass(
            AbstractPreAuthenticatedListener::class, [
            $tokenStorage,
            $authenticationManager,
            'TheProviderKey',
        ]);
        $listener
            ->expects($this->once())
            ->method('getPreAuthenticatedData')
            ->willReturn($userCredentials);

        $event = $this->createMock(RequestEvent::class);
        $event
            ->expects($this->any())
            ->method('getRequest')
            ->willReturn($request)
        ;

        $listener($event);
    }
}
