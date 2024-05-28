<?php

define('API_DOMAIN', 'https://apii.online/apii');
define('CRAWL_APII_OPTION_SETTINGS', 'crawl_apii_schedule_settings');
define('CRAWL_APII_OPTION_RUNNING', 'crawl_apii_schedule_running');
define('CRAWL_APII_OPTION_SECRET_KEY', 'crawl_apii_schedule_secret_key');

define('SCHEDULE_CRAWLER_TYPE_NOTHING', 0);
define('SCHEDULE_CRAWLER_TYPE_INSERT', 1);
define('SCHEDULE_CRAWLER_TYPE_UPDATE', 2);
define('SCHEDULE_CRAWLER_TYPE_ERROR', 3);
define('SCHEDULE_CRAWLER_TYPE_FILTER', 4);