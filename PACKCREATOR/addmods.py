__author__ = 'modmuss50'

import sys
import os

#(PACKNAME) (MODS) (REPOVERSION)

print "Starting pack generator"
packName = ""
packMods = ""
repoVersion = ""


packName = sys.argv[1]
packMods = sys.argv[2]
repoVersion = sys.argv[3]

filename = "packs/" + packName

if os.path.isdir(filename):
    print "Adding mods"
else:
    print "That pack does not exits!"
    sys.exit(1)


file = open(filename + "/mods.txt", "w")
file.write(packMods)
file.close()

file = open(filename + "/repo.txt", "w")
file.write(repoVersion)
file.close()
