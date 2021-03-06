<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

/**
 * Will be displayed in the UI.
 */
define('PROJECT_NAME', 'Piwik');

/**
 * Emails will be sent to this address in case anything goes wrong during the import.
 */
define('PROJECT_EMAIL', 'developer@piwik.org');

/**
 * You can create a new application on the application settings page: https://github.com/settings/applications/new .
 * After adding an application the client id and secret will be displayed.
 * If you do not provide a client id and secret you will be limited to 60 requests per hour instead of 5000.
 */
define('GITHUB_CLIENT_ID', '');
define('GITHUB_CLIENT_SECRET', '');
define('GITHUB_ORGANIZATION', 'piwik');
define('GITHUB_REPOSITORY', 'piwik');
define('NUMBER_OF_ISSUES_PER_PAGE', 100);

/**
 * Set to true during development. Causes twig templates to automatically update on change and detailed
 * error messages will be displayed if enabled.
 */
define('DEBUG_ENABLED', false);
