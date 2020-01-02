from flask import Flask, jsonify, request
import dialog-api-interaction

app = Flask(__name__)

@app.route("/communicate", methods=['POST'])
def index():
    some_json=request.get_json()
        


if __name__=='__main__':
    app.run(debug=True)