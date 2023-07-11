<?php

echo "Migrating \n";
exec('php artisan migrate:fresh');
echo "Migrates finish \n";
exec('php artisan db:seed --class=CommonSeeder');
echo "Test database refresh \n";
echo "All done! \n";
