@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../php-http/discovery/bin/puli.phar
php "%BIN_TARGET%" %*
