#!/usr/bin/env sh

echo "" > install_log.txt

echo "Installing composer dependencies..."
ant composer >> ./install_log.txt

if [ $? != 0 ]
then
	echo "unable to install composer dependencies"
	exit 1
fi

echo "Building db schema..."
php artisan migrate:refresh >> ./install_log.txt

if [ $? != 0 ]
then
	echo "enable to build db schema"
	exit 1
fi

echo "Seeding db..."
php artisan db:seed >> ./install_log.txt

if [ $? != 0 ]
then
	echo "enable to seed db"
	exit 1
fi

echo "Compiling sass files...."
ant compile > /dev/null

echo "Installing bower..."
(
	cd public
	bower install >> ./install_log.txt
)
