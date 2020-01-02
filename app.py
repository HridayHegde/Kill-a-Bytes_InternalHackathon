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

if __name__=='__main__':
    app.run(debug=True)