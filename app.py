import dialoginteraction
from flask import Flask, request
from flask_cors import CORS

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

if __name__=='__main__':
    app.run(debug=True)