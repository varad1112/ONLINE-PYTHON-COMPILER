
# Sample code to perform I/O:

try:
	name = input()		# Reading input from STDIN
	print('Hi, %s.' % name)		# Writing output to STDOUT
except EOFError as e:
	print(e)


# Write your code here