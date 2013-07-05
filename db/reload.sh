#!/bin/bash

DB="elegis"

function do_reload {
	echo "drop database $DB" | psql -hlocalhost -Uovas postgres
	echo "create database $DB" | psql -hlocalhost -Uovas postgres
	gunzip < $DB.sql.gz | psql -hlocalhost -Uovas $DB -f -
}

read -p "Continue (y/n)?" choice
case "$choice" in 
  y|Y ) do_reload;;
  n|N ) echo "Aborted";;
  * ) echo "Invalid";;
esac

