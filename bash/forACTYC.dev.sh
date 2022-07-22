#!/bin/bash

function RUN() {
 script_dir=$(cd "$(dirname "${BASH_SOURCE[0]}")" &>/dev/null && pwd -P)
 DATA="$(date +%Y-%m-%d:%k:%M:%S)";
 mkdir -p "$script_dir/TEMP" && cd "$script_dir/TEMP"

 echo "START" && sleep 2;
 touch "file-${DATA}.txt"
 echo "END" && sleep 2
};

RUN



#exit 0
