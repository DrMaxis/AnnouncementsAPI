# Announcements API

 This is a basic API built with Laravel to feed announcements to any SPA application


## Infrastructure

* Ubuntu 22.04
* PHP 8.1^
* Apache 2.4
* Mysql 5.7.^
* NodeJS ^latest | ^14
* Redis
* MongoDB 3.6

## Application

- API: Laravel 10
- [Frontend: React 17.02^](https://github.com/drmaxis/announcements-frontend) | Visit the Frontend to setup local connection.

# Local Development Environment Setup Instructions

## Step 1 - Install necessary system requirements

Install the following base dependencies on your computer:

##### Virtualization Environment

* [Docker]([https://www.vagrantup.com/](https://docs.docker.com/get-docker/)) - latest 

##### Backend Dependencies Setup: Apache, PHP, Mysql, Perl

**NOTE:** For Windows systems you may need to install [XAMPP](https://www.apachefriends.org/index.html) 

* PHP - See [infrastructure](#infrastructure) - will be used to install php dependencies (optional)

##### Frontend Dependencies Setup: NodeJS

* [NodeJS](https://nodejs.org/en/download/) - See [infrastructure](#infrastructure) - will be used to install js dependencies and build the js app (optional)

* [NVM | Node Version Manager](https://github.com/coreybutler/nvm-windows/releases) - Node Version Manager is a valuable tool for controlling your Node version for development. (optional) [Install Guide](https://dev.to/skaytech/how-to-install-node-version-manager-nvm-for-windows-10-4nbi)

* Yarn - [Install Yarn](https://classic.yarnpkg.com/lang/en/docs/install/#windows-stable) | Or you can just use NPM

## Step 2 - Start Dev. Environment

- Navigate to project directory
- Configure environment:  `cp .env.local.example .env` - customize if needed
- Install php dependencies: `composer install`
- Set up application: `sail up -d`
- Set application key: `./vendor/bin/sail artisan key:generate` | `sail artisan key:generate`
- Run database migrations: `./vendor/bin/sail migrate` | `sail artisan migrate`
- Seed the database: `./vendor/bin/sail artisan db:seed` | `sail artisan db:seed` -- this will create 20 dummy announcements





