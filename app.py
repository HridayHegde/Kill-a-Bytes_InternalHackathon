import dialoginteraction
from flask import Flask, request
from flask_cors import CORS
import mysql.connector

app = Flask(__name__)
CORS(app)

@app.route("/communicate", methods=['POST'])
def communicate():
    some_json=request.get_json()
    sessionid = some_json['session']
    text = some_json['text']  
    response = dialoginteraction.detect_intent_texts(sessionid,text)  
    return response

@app.route("/addtodb", methods=['POST'])
def addtodb():
    jsonget = request.get_json()
    name = jsonget['name']
    email = jsonget['emailid']
    phone = jsonget['phno']

    print(name+"\n")
    print(email+"\n")
    print(phone+"\n")
    
    mydb = mysql.connector.connect(
    host="den1.mysql4.gear.host",
    database="kab2020",
    user="kab2020",
    passwd="Xu7h4?m1u0!9"
    )

    print(mydb)
    mycursor = mydb.cursor()

    sql = "INSERT INTO customers (name, email, phone) VALUES (%s, %s,%s)"
    val = (name, email,int(phone))
    mycursor.execute(sql, val)

    mydb.commit()


if __name__=='__main__':
    app.run(debug=True)