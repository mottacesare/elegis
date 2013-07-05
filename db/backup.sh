#!/bin/bash

DB="elegis"

pg_dump  -f $DB.sql -Uovas -hlocalhost $DB
gzip $DB.sql
