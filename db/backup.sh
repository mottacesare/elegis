#!/bin/bash

DB="elegis"

pg_dump  -f $DB.sql -Uelegis -hlocalhost $DB
gzip $DB.sql
