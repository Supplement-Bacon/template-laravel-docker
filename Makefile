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
