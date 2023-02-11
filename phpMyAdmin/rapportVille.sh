#!/bin/bash

echo "Do you want to run a report or have a demo ?
Type R for report or D for demo"
read input

BASEDIR=$(dirname $0)

if [ $input == "R" ]; then
  python3 $BASEDIR/rapportVille.py &
elif [ $input == "D" ]; then
  python3 $BASEDIR/rapportVille_demo.py &
else
  echo "Invalid input"
fi