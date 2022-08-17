#!/bin/bash
for i in *zip
do
	mkdir -p "~/qsx/Pictures/Vixen/$i"
	if unzip "$i" -d ~/qsx/Pictures/Vixen/"$i"
	then
		rm -v "$i"
		# ~ echo remove $i
	else
		echo error processing $i
		exit
	fi
done
