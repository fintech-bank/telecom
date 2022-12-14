.PHONY: helpers
helpers:
	php artisan ide-helper:generate
	php artisan ide-helper:models -F
	php artisan ide-helper:meta

seed:
	php artisan system:seed --base
	php artisan system:clear
	chmod -R 777 storage/ bootstrap/
