import sys, os

with open(sys.argv [1]) as f:
    s = f.read()

for line in s.split ("\n"):
	v = line.split (",")
	if (len (v) < 2):
		continue
	cmd = "wget -c '%s' -O '%s'" % (v [1], v [0])
	exit_code = os.waitstatus_to_exitcode(os.system (cmd))
	if (exit_code != 0):
		print ("wget error code: %d" % exit_code)
		exit ()

	if (len (v) == 3 and v [2].startswith ("https://")):
		cmd = "wget -c '%s' -O .thumbs/.'%s'.jpg" % (v [2], v [0])
		print (cmd)
		exit_code = os.waitstatus_to_exitcode(os.system (cmd))
		if (exit_code != 0):
			print ("wget error code: %d" % exit_code)
			exit ()


