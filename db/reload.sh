#!/bin/bash

DB="elegis"

function do_reload {
	echo "drop database $DB" | psql -hlocalhost -Uelegis postgres
	echo "create database $DB" | psql -hlocalhost -Uelegis postgres
	gunzip < $DB.sql.gz | psql -hlocalhost -Uelegis $DB -f -
}

read -p "Continue (y/n)?" choice
case "$choice" in 
  y|Y ) do_reload;;
  n|N ) echo "Aborted";;
  * ) echo "Invalid";;
esac

