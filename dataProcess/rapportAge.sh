#!/bin/bash

echo "Do you want to run a report or have a demo ?
Type R for report or D for demo"
read input

BASEDIR=$(dirname $0)

if [ $input == "R" ]; then
  python3 $BASEDIR/src/rapportAge.py &
elif [ $input == "D" ]; then
  python3 $BASEDIR/src/apportAge_demo.py &
else
  echo "Invalid input"
fi