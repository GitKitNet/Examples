#!/bin/bash

# bash <(curl -fLSs https://raw.githubusercontent.com/GitKitNet/exampl/main/bash/forACTYC.dev.sh)

function RUN() {
 script_dir=$(cd "$(dirname "${BASH_SOURCE[0]}")" &>/dev/null && pwd -P)
 DATA="$(date +%Y-%m-%d_%k-%M-%S)";
 mkdir -p "$script_dir/TEMP" && cd "$script_dir/TEMP"

 echo "START" && sleep 2;
 touch "file-${DATA}.txt"
 echo "END" && sleep 2
};

RUN



#exit 0
