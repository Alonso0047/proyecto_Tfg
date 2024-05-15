# Database

This directory contains the files related to the database.

## Structure

The database is composed of two services:

* ``mysql``: Database service using MySQL.
* ``phpmyadmin``: Administration services using ``PhPMyAdmin``.

## Launching the database.

From the root of the directory, you need to run:

```bash
docker-compose up
```

This command will start the containers specified in `docker-compose.yml`. 

If you want to run this on the background use:

```bash
docker-compose up -d
```

## Stopping the database

```bash
docker-compose down
```


