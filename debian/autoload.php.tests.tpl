<?php

require_once 'Symfony/autoload.php';
require_once 'Symfony/Bridge/PhpUnit/autoload.php';
require_once 'Symfony/Component/Messenger/Bridge/AmazonSqs/autoload.php';
require_once 'Symfony/Component/Messenger/Bridge/Beanstalkd/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Discord/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Esendex/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Firebase/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/FreeMobile/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/GoogleChat/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Infobip/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/LinkedIn/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Mattermost/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Mobyt/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Nexmo/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/OvhCloud/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/RocketChat/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Sendinblue/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Sinch/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Slack/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Smsapi/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Telegram/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Twilio/autoload.php';
require_once 'Symfony/Component/Notifier/Bridge/Zulip/autoload.php';

require_once 'Composer/autoload.php';
require_once 'Cache/IntegrationTests/autoload.php';
require_once 'Doctrine/Bundle/DoctrineBundle/autoload.php';
require_once 'GuzzleHttp/Promise/autoload.php';
require_once 'Http/Client/autoload.php';
require_once 'Masterminds/HTML5/autoload.php';
require_once 'Nyholm/Psr7/autoload.php';
// Predis is installed in a pretty weird path, see #779418
require_once 'php-nrk-predis/Autoloader.php';
Predis\Autoloader::register();
require_once 'Psr/Http/Client/autoload.php';
require_once 'Psr/SimpleCache/autoload.php';
require_once 'Twig/Extra/CssInliner/autoload.php';
require_once 'Twig/Extra/Inky/autoload.php';
require_once 'Twig/Extra/Markdown/autoload.php';

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'symfony\\component\\routing\\tests\\fixtures\\attributesfixtures\\attributesclassparamaftercommacontroller' => '/../src/Symfony/Component/Routing/Tests/Fixtures/AttributesFixtures/AttributesClassParamAfterCommaController.php',
                'symfony\\component\\routing\\tests\\fixtures\\attributesfixtures\\attributesclassparamafterparenthesiscontroller' => '/../src/Symfony/Component/Routing/Tests/Fixtures/AttributesFixtures/AttributesClassParamAfterParenthesisController.php',
                'symfony\\component\\routing\\tests\\fixtures\\attributesfixtures\\attributesclassparaminlineaftercommacontroller' => '/../src/Symfony/Component/Routing/Tests/Fixtures/AttributesFixtures/AttributesClassParamInlineAfterCommaController.php',
                'symfony\\component\\routing\\tests\\fixtures\\attributesfixtures\\attributesclassparaminlineafterparenthesiscontroller' => '/../src/Symfony/Component/Routing/Tests/Fixtures/AttributesFixtures/AttributesClassParamInlineAfterParenthesisController.php',
                'symfony\\component\\routing\\tests\\fixtures\\attributesfixtures\\attributesclassparaminlinequotedaftercommacontroller' => '/../src/Symfony/Component/Routing/Tests/Fixtures/AttributesFixtures/AttributesClassParamInlineQuotedAfterCommaController.php',
                'symfony\\component\\routing\\tests\\fixtures\\attributesfixtures\\attributesclassparaminlinequotedafterparenthesiscontroller' => '/../src/Symfony/Component/Routing/Tests/Fixtures/AttributesFixtures/AttributesClassParamInlineQuotedAfterParenthesisController.php',
                'symfony\\component\\routing\\tests\\fixtures\\attributesfixtures\\attributesclassparamquotedaftercommacontroller' => '/../src/Symfony/Component/Routing/Tests/Fixtures/AttributesFixtures/AttributesClassParamQuotedAfterCommaController.php',
                'symfony\\component\\routing\\tests\\fixtures\\attributesfixtures\\attributesclassparamquotedafterparenthesiscontroller' => '/../src/Symfony/Component/Routing/Tests/Fixtures/AttributesFixtures/AttributesClassParamQuotedAfterParenthesisController.php',
                ___CLASSLIST___
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn]) and file_exists(___BASEDIR___$classes[$cn])) {
            require ___BASEDIR___$classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd