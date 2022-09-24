import socket
# import required modules
import mysql.connector

# create connection object

# default_authentication_plugin=caching_sha2_password
# default_authentication_plugin= "Iamsammed@12"
con = mysql.connector.connect(
host="localhost", user="root",
password="sammed@8308497059", database="college",auth_plugin='mysql_native_password')

# create cursor object
cursor = con.cursor()

def server_program():
    # get the hostname
    host = socket.gethostname()
    print(host)
    port = 5000  # initiate port no above 1024

    server_socket = socket.socket()  # get instance
    # look closely. The bind() function takes tuple as argument
    server_socket.bind((host, port))  # bind host address and port together

    # configure how many client the server can listen simultaneously
    server_socket.listen(2)
    conn, address = server_socket.accept()  # accept new connection
    print("Connection from: " + str(address))
    while True:
        # receive data stream. it won't accept data packet greater than 1024 bytes
        data = conn.recv(1024).decode()
        if not data:
            # if data is not received break
            break
        query1 = str(data)
        print("from connected user: " + str(data))
        cursor.execute(query1)
        table = cursor.fetchall()
        data = ""
        for row in table:
            data += str(row[0]) + " "
            data += str(row[1]) + " "
            data += str(row[2]) + " "
        
        conn.send(data.encode())  # send data to the client

    conn.close()  # close the connection


if __name__ == '__main__':
    server_program()