<?php

// require_once 'Doctrine/Common/EventManager/autoload.php'; (already required by at least Bridge/Doctrine)
// require_once 'Doctrine/Persistence/autoload.php'; (already required by at least Bridge/Doctrine)
// require_once 'Twig/autoload.php'; (already required by Bridge/Twig)
// require_once 'Psr/Cache/autoload.php'; (already required by Cache)
// require_once 'Psr/Container/autoload.php'; (already required by DependencyInjection)
// require_once 'Psr/Link/autoload.php'; (already required by WebLink)
// require_once 'Psr/Log/autoload.php'; (already required by Cache and more)
// require_once 'Symfony/Contracts/autoload.php'; (already required by FrameworkBundle and more)

require_once 'Symfony/Component/Mailer/Bridge/Amazon/autoload.php';
require_once 'Symfony/Component/Asset/autoload.php';  // (already *included* by Bridge/Twig)
require_once 'Symfony/Component/BrowserKit/autoload.php'; // (already *included* by HttpKernel)
// require_once 'Symfony/Component/Cache/autoload.php'; (already required by FrameworkBundle and more)
// require_once 'Symfony/Component/Config/autoload.php'; (already required by FrameworkBundle)
require_once 'Symfony/Component/Console/autoload.php'; // (already *included* by Yaml and more)
require_once 'Symfony/Component/CssSelector/autoload.php'; // (already *included* by DomCrawler)
// require_once 'Symfony/Component/DependencyInjection/autoload.php'; (already required by FrameworkBundle and more)
require_once 'Symfony/Bundle/DebugBundle/autoload.php';
require_once 'Symfony/Bridge/Doctrine/autoload.php'; // (already *included* by PropertyInfo)
// require_once 'Symfony/Component/DomCrawler/autoload.php'; (already required by BrowserKit)
require_once 'Symfony/Component/Dotenv/autoload.php';
// require_once 'Symfony/Component/ErrorHandler/autoload.php'; (already required by FrameworkBundle)
// require_once 'Symfony/Component/EventDispatcher/autoload.php'; (already required by Form and more)
require_once 'Symfony/Component/ExpressionLanguage/autoload.php'; // (already *included* by DependencyInjection and more)
// require_once 'Symfony/Component/Filesystem/autoload.php'; (already required by FrameworkBundle and more)
// require_once 'Symfony/Component/Finder/autoload.php'; (already required by FrameworkBundle and more)
require_once 'Symfony/Component/Form/autoload.php'; // (already *included* by FrameworkBundle and more)
// require_once 'Symfony/Bundle/FrameworkBundle/autoload.php'; (already required by WebServerBundle)
require_once 'Symfony/Component/Mailer/Bridge/Google/autoload.php';
require_once 'Symfony/Component/HttpClient/autoload.php';
// require_once 'Symfony/Component/HttpFoundation/autoload.php'; (already required by FrameworkBundle and more)
// require_once 'Symfony/Component/HttpKernel/autoload.php'; (already required by FrameworkBundle and more)
require_once 'Symfony/Component/Inflector/autoload.php';
// require_once 'Symfony/Component/Intl/autoload.php'; (already required by Form)
require_once 'Symfony/Component/Ldap/autoload.php'; // (already *included* by Security/Core)
require_once 'Symfony/Component/Lock/autoload.php'; // (already *included* by Console)
require_once 'Symfony/Component/Mailer/Bridge/Mailchimp/autoload.php';
// require_once 'Symfony/Component/Mailer/autoload.php'; (already required by every Mailer Bridge)
require_once 'Symfony/Component/Mailer/Bridge/Mailgun/autoload.php';
require_once 'Symfony/Component/Mailer/Bridge/Mailjet/autoload.php';
require_once 'Symfony/Component/Messenger/autoload.php';
// require_once 'Symfony/Component/Mime/autoload.php'; (already required by BrowserKit and more)
require_once 'Symfony/Bridge/Monolog/autoload.php';
// require_once 'Symfony/Component/OptionsResolver/autoload.php'; (already required by Form)
require_once 'Symfony/Component/Mailer/Bridge/Postmark/autoload.php';
require_once 'Symfony/Component/Notifier/autoload.php';
require_once 'Symfony/Component/Process/autoload.php'; // (already *included* by FrameworkBundle and more)
// require_once 'Symfony/Component/PropertyAccess/autoload.php'; (already required by Form and more)
require_once 'Symfony/Component/PropertyInfo/autoload.php'; // (already *included* by FrameworkBundle and more)
require_once 'Symfony/Bridge/ProxyManager/autoload.php'; // (already *included* by DependencyInjection)
require_once 'Symfony/Component/RateLimiter/autoload.php';
// require_once 'Symfony/Component/Routing/autoload.php'; (already required by FrameworkBundle and more)
require_once 'Symfony/Bundle/SecurityBundle/autoload.php';
// require_once 'Symfony/Component/Security/Core/autoload.php'; (already required by SecurityBundle and more)
// require_once 'Symfony/Component/Security/Csrf/autoload.php'; (already required by SecurityBundle and more)
// require_once 'Symfony/Component/Security/Guard/autoload.php'; (already required by SecurityBundle and more)
// require_once 'Symfony/Component/Security/Http/autoload.php'; (already required by SecurityBundle and more)
require_once 'Symfony/Component/Mailer/Bridge/Sendgrid/autoload.php';
require_once 'Symfony/Component/Mailer/Bridge/Sendinblue/autoload.php';
require_once 'Symfony/Component/Semaphore/autoload.php';
require_once 'Symfony/Component/Serializer/autoload.php'; // (already *included* by FrameworkBundle and more)
// require_once 'Symfony/Component/Stopwatch/autoload.php'; (already required by EventDispatcher and more)
require_once 'Symfony/Component/String/autoload.php';
require_once 'Symfony/Component/Templating/autoload.php'; // (already *included* by TwigBridge)
// require_once 'Symfony/Component/Translation/autoload.php'; (already required by Validator)
// require_once 'Symfony/Bridge/Twig/autoload.php'; (already required by TwigBundle and more)
require_once 'Symfony/Bundle/TwigBundle/autoload.php';
require_once 'Symfony/Component/Uid/autoload.php';
require_once 'Symfony/Component/Validator/autoload.php'; // (already *included* by FrameworkBundle and more)
// require_once 'Symfony/Component/VarDumper/autoload.php'; (already required by DebugBundle)
// require_once 'Symfony/Component/VarExporter/autoload.php'; (already required by Cache)
require_once 'Symfony/Component/WebLink/autoload.php'; // (already *included* by FrameworkBundle and TwigBridge)
require_once 'Symfony/Bundle/WebProfilerBundle/autoload.php';
require_once 'Symfony/Component/Workflow/autoload.php';
require_once 'Symfony/Component/Yaml/autoload.php'; // (already *included* by FrameworkBundle and more)

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'symfony\\bundle\\fullstack' => '/Bundle/FullStack.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
