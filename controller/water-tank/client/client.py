import socket
import time
TCP_IP = '127.0.0.1'
TCP_PORT = 5005
#BUFFER_SIZE = 1024
#MESSAGE = "0"
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect((TCP_IP, TCP_PORT))

#while True:
for i in range(300): 
    send_data = str(i)
    #print("Enter Device ID: ")
    #device_id = input()
    #print("Enter Tank Status 0 or 1: ")
    #status = input()
    #send_data = device_id+","+ status
    #print(status)
    s.send(send_data.encode())
    time.sleep(0.00001)
    #s.close()