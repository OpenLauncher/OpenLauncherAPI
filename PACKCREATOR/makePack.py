__author__ = 'modmuss50'

import sys
import os

#(PACKNAME) (PACKMAKER) (PACKDESCRIPTION) (MCVER) (FORGEVER)

print "Starting to generate your mod pack!"
packName = ""
packCreator = ""
packDescription = ""
mcVersion = ""
forgeVersion = ""

packName = sys.argv[1]
packCreator = sys.argv[2]
packDescription = sys.argv[3]
mcVersion = sys.argv[4]
forgeVersion = sys.argv[5]

filename = "packs/" + packName

if os.path.isdir(filename):
    print "That pack exits! I cannot continue!"
    sys.exit(1)
else:
    os.makedirs(filename)

file = open(filename + "/desc.txt", "w")
file.write(packDescription)
file.close()

file = open(filename + "/mcInfo.txt", "w")
file.write(mcVersion + "-" + forgeVersion)
file.close()

file = open(filename + "/packInfo.txt", "w")
file.write(packName + "\n")
file.write(packCreator)
file.close()

file = open(filename + "/mods.txt", "w")
file.close()

print "Mod pack structure created!"

