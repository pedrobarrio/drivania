UID=$(shell id -u)
GID=$(shell id -g)
FILE=docker-compose.yml

.DEFAULT_GOAL:=help

##@ Helpers
.PHONY: help

help:  ## Display this help
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2 } /^##@/ { printf "\n\033[1m%s\033[0m\n", substr($$0, 5) } ' $(MAKEFILE_LIST)

##@ Start
.PHONY: build
build: ## composer-install && build
	deps start

.PHONY: deps
deps: ## composer-install
	composer-install

##@ Composer
composer-env-file:
	@if [ ! -f .env.local ]; then echo '' > .env.local; fi

.PHONY: composer-install
composer-install: ## compose
	CMD=install

.PHONY: composer-update
composer-update: ## composer-update
 	CMD=update

##@ Docker Compose
.PHONY: start
start: ## docker compose build
 	CMD=up --build -d

.PHONY: stop
stop: ## docker compose stop
	CMD=stop

.PHONY: destroy
destroy: ## docker compose down
	CMD=down

##@ Tests

.PHONY: tests
tests: ## execute project unit tests
	docker-compose -f ${FILE} exec -T --user=${UID} php sh -c -i "php -d memory_limit=-1 ./bin/phpunit --no-coverage"