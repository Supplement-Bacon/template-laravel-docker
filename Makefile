# Make has a very stupid relationship with tabs.
# All actions of every rule are identified by tabs.
# And, no, four spaces don't make a tab. Only a tab makes a tab.
# Use cat -e -t -v Makefile to check file health
# Tabs are represented by ^I
# Line endings are represented by $

DOCK=docker-compose
RUN=$(DOCK) run --rm
EXEC=$(DOCK) exec
ARTISAN=php artisan
CODECEPT=./vendor/bin/codecept

############################################################
#####                      Docker                      #####
############################################################

start:
	$(DOCK) up --build -d

stop:
	$(DOCK) stop

reset: stop start

bash:
	$(EXEC) app bash

status:
	$(DOCK) ps

logs:
	docker-compose logs -f



############################################################
#####                      Laravel                     #####
############################################################

laravel-install:
	$(EXEC) app composer install
	$(EXEC) app $(ARTISAN) key:generate
	$(EXEC) app $(ARTISAN) migrate



############################################################
#####                      Passport                    #####
############################################################

passport-install:
	$(EXEC) app $(ARTISAN) passport:install

laravel-setup-database:
	$(EXEC) app $(ARTISAN) migrate --force

laravel-setup-test-database:
	$(EXEC) app touch storage/testing.sqlite
	$(EXEC) app $(ARTISAN) migrate --env=testing --database=sqlite --force

laravel-tests:
	$(EXEC) app $(CODECEPT) build
	$(EXEC) app $(CODECEPT) run --xml result.xml


############################################################
#####                      Swagger                     #####
############################################################

swagger-generate:
	$(EXEC) app $(ARTISAN) l5-swagger:generate
