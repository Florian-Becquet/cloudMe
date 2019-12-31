<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.9.1@89a5c76c39c292f7798f964ab3c836c3f8192a55',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => 'v2.11.0@b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff',
  'doctrine/dbal' => 'v2.10.0@0c9a646775ef549eb0a213a4f9bd4381d9b4d934',
  'doctrine/doctrine-bundle' => '2.0.0@82826278bb88ae8c20aee3af3191430dcbcca63a',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.0@8e124252d2f6be1124017d746d5994dd4095d66f',
  'doctrine/orm' => 'v2.7.0@4d763ca4c925f647b248b9fa01b5f47aa3685d62',
  'doctrine/persistence' => '1.2.0@43526ae63312942e5316100bb3ed589ba1aba491',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'dompdf/dompdf' => 'v0.8.3@75f13c700009be21a1965dc2c5b68a8708c22ba2',
  'egulias/email-validator' => '2.1.11@92dd169c32f6f55ba570c309d83f5209cefb5e23',
  'fig/link-util' => '1.0.0@1a07821801a148be4add11ab0603e4af55a72fac',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'knplabs/knp-components' => 'v2.3.0@d61c56ff4d427a14f0c308ee388fb75e94d01a7c',
  'knplabs/knp-paginator-bundle' => 'v4.1.1@ea6ac65818a734a9afaa05270e162506e726c184',
  'monolog/monolog' => '1.25.2@d5e2fb341cb44f7e2ab639d12a1e5901091ec287',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phenx/php-font-lib' => '0.5.1@760148820110a1ae0936e5cc35851e25a938bc97',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.2@b83ff7cfcfee7827e1e78b637a5904fe6a96698e',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sabberworm/php-css-parser' => '8.3.0@91bcc3e3fdb7386c9a2e0e0aa09ca75cc43f121f',
  'sensio/framework-extra-bundle' => 'v5.5.1@dfc2c4df9f7d465a65c770e9feb578fe071636f7',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.3.8@3f97e57596884f7b9158d564a533112a0d19dbdd',
  'symfony/cache' => 'v4.3.8@83dca34362a0aba2b93aa1226dac6ef7cfea1262',
  'symfony/cache-contracts' => 'v1.1.7@af50d14ada9e4e82cfabfabdc502d144f89be0a1',
  'symfony/config' => 'v4.3.8@8267214841c44d315a55242ea867684eb43c42ce',
  'symfony/console' => 'v4.3.8@831424efae0a1fe6642784bd52aae14ece6538e6',
  'symfony/debug' => 'v4.3.8@5ea9c3e01989a86ceaa0283f21234b12deadf5e2',
  'symfony/dependency-injection' => 'v4.3.8@80c6d9e19467dfbba14f830ed478eb592ce51b64',
  'symfony/doctrine-bridge' => 'v4.3.8@a18757e2de67c7add2b3175ff12e5f16e8f0ca9d',
  'symfony/dotenv' => 'v4.3.8@62d93bf07edd0d76f033d65a7fd1c1ce50d28b50',
  'symfony/event-dispatcher' => 'v4.3.8@0df002fd4f500392eabd243c2947061a50937287',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.3.8@d81f0eb914f534e8b17a9db8c2408d1f0cf55fd2',
  'symfony/filesystem' => 'v4.3.8@9abbb7ef96a51f4d7e69627bc6f63307994e4263',
  'symfony/finder' => 'v4.3.8@72a068f77e317ae77c0a0495236ad292cfb5ce6f',
  'symfony/flex' => 'v1.4.8@f5bfc79c1f5bed6b2bb4ca9e49a736c2abc03e8f',
  'symfony/form' => 'v4.3.8@1134c093d6fd339ea1b8823c50940607b58349f2',
  'symfony/framework-bundle' => 'v4.3.8@117560d884615d0c39179a24aa3c69c4af540d81',
  'symfony/http-client' => 'v4.3.8@ae3a9cd491f1aadb5583f34a6bda5cca34081ce8',
  'symfony/http-client-contracts' => 'v1.1.8@088bae75cfa2ec5eb6d33dce17dbd8613150ce6e',
  'symfony/http-foundation' => 'v4.3.8@cabe67275034e173350e158f3b1803d023880227',
  'symfony/http-kernel' => 'v4.3.8@5fdf186f26f9080de531d3f1d024348b2f0ab12f',
  'symfony/inflector' => 'v4.3.8@f97c69c132c08e31d291689d2d77bb0878094acb',
  'symfony/intl' => 'v4.3.8@818771ff6acef04cdce05023ddfc39b7078014bf',
  'symfony/mime' => 'v4.3.8@22aecf6b11638ef378fab25d6c5a2da8a31a1448',
  'symfony/monolog-bridge' => 'v4.3.8@6b9d84b34e0c2c5d9d4f4dbd5f36b0c9e4e5ef93',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.3.8@f46c7fc8e207bd8a2188f54f8738f232533765a4',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-icu' => 'v1.12.0@66810b9d6eb4af54d543867909d65ab9af654d7e',
  'symfony/polyfill-intl-idn' => 'v1.12.0@6af626ae6fa37d396dc90a399c0ff08e5cfc45b2',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/polyfill-php72' => 'v1.12.0@04ce3335667451138df4307d6a9b61565560199e',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/process' => 'v4.3.8@3b2e0cb029afbb0395034509291f21191d1a4db0',
  'symfony/property-access' => 'v4.3.8@bb0c302375ffeef60c31e72a4539611b7f787565',
  'symfony/property-info' => 'v4.3.8@460242fd0696f3a4a8a7f6e4105b832557960c3b',
  'symfony/routing' => 'v4.3.8@533fd12a41fb9ce8d4e861693365427849487c0e',
  'symfony/security-bundle' => 'v4.3.8@9f247c672e08385c67e3ca7cfc1484072bcc6517',
  'symfony/security-core' => 'v4.3.8@8c46ea77fe0738f2495eacc08fa34e1e19ff0b0d',
  'symfony/security-csrf' => 'v4.3.8@0760ec651ea8ff81e22097780337e43f3a795769',
  'symfony/security-guard' => 'v4.3.8@62cc82a384f2c1c75c58189fcf713032f6fef1e9',
  'symfony/security-http' => 'v4.3.8@290b23a46a932746c4cf3c313d59d99f82af2a87',
  'symfony/serializer' => 'v4.3.8@18f30003dbe7178dcc1f75901ecb9f4937d146f5',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/service-contracts' => 'v1.1.8@ffc7f5692092df31515df2a5ecf3b7302b3ddacf',
  'symfony/stopwatch' => 'v4.3.8@e96c259de6abcd0cead71f0bf4d730d53ee464d0',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v4.3.8@bbce239b35b0cd47bd75848b23e969f17dd970e7',
  'symfony/translation-contracts' => 'v1.1.7@364518c132c95642e530d9b2d217acbc2ccac3e6',
  'symfony/twig-bridge' => 'v4.3.8@67fdb93de3361bcf1ab02bd8275af8c790bae900',
  'symfony/twig-bundle' => 'v4.3.8@869ebf144acafd19fb9c8c386808c26624f28572',
  'symfony/validator' => 'v4.3.9@539484217f9966aa93e01915c5035c74b6ea1b9b',
  'symfony/var-exporter' => 'v4.3.8@097aa4c02954dabe9d508229be86213723973ac0',
  'symfony/web-link' => 'v4.3.8@4bd0ce7c54d604300deee8eb1b1beda856fbba20',
  'symfony/yaml' => 'v4.3.8@324cf4b19c345465fad14f3602050519e09e361d',
  'twig/twig' => 'v2.12.2@d761fd1f1c6b867ae09a7d8119a6d95d06dc44ed',
  'webmozart/assert' => '1.6.0@573381c0a64f155a0d9a23f4b0c797194805b925',
  'zendframework/zend-code' => '3.4.0@46feaeecea14161734b56c1ace74f28cb329f194',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'easycorp/easy-log-handler' => 'v1.0.9@224e1dfcf9455aceee89cd0af306ac097167fac1',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/browser-kit' => 'v4.3.8@b14fa08508afd152257d5dcc7adb5f278654d972',
  'symfony/css-selector' => 'v4.3.8@f4b3ff6a549d9ed28b2b0ecd1781bf67cf220ee9',
  'symfony/debug-bundle' => 'v4.3.8@bb83f93785dae1f9c227a408ced3eb3f86399bf8',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/dom-crawler' => 'v4.3.8@4b9efd5708c3a38593e19b6a33e40867f4f89d72',
  'symfony/maker-bundle' => 'v1.14.3@c864e7f9b8d1e1f5f60acc3beda11299f637aded',
  'symfony/phpunit-bridge' => 'v5.0.0@3c288a1f1a46ddffc299fd46ddb643d50debde85',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/var-dumper' => 'v4.3.8@ea4940845535c85ff5c505e13b3205b0076d07bf',
  'symfony/web-profiler-bundle' => 'v4.3.8@6ce12ffe97d9e26091b0e7340a9d661fba64655e',
  'symfony/web-server-bundle' => 'v4.3.8@dc26b980900ddf3e9feade14e5b21c029e8ca92f',
  'paragonie/random_compat' => '2.*@342610f3ca65e0a3de8b94b703522f58c4e04f14',
  'symfony/polyfill-ctype' => '*@342610f3ca65e0a3de8b94b703522f58c4e04f14',
  'symfony/polyfill-iconv' => '*@342610f3ca65e0a3de8b94b703522f58c4e04f14',
  'symfony/polyfill-php71' => '*@342610f3ca65e0a3de8b94b703522f58c4e04f14',
  'symfony/polyfill-php70' => '*@342610f3ca65e0a3de8b94b703522f58c4e04f14',
  'symfony/polyfill-php56' => '*@342610f3ca65e0a3de8b94b703522f58c4e04f14',
  '__root__' => 'dev-master@342610f3ca65e0a3de8b94b703522f58c4e04f14',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
