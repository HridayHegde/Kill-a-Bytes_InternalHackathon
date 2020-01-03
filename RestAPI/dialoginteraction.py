import os
os.environ["GOOGLE_APPLICATION_CREDENTIALS"]="\GCloudCredentials\credentials.json"
import json
import dialogflow_v2 as dialogflow

import argparse
import uuid


#Variables
tempSessionid = "12345"
tempText = []
global proj_id
proj_id = ""


#JSON Parsing
def getid():
    proj_id = ""
    with open('/GCloudCredentials/credentials.json') as json_file:
        data = json.load(json_file)
        proj_id = data['project_id']
    return proj_id

#GAPI Interaction


# [START dialogflow_detect_intent_text]
def detect_intent_texts(session_id, text):

    language_code ="en-US"
    project_id = getid()
    
    session_client = dialogflow.SessionsClient()

    session = session_client.session_path(project_id, session_id)
    print('Session path: {}\n'.format(session))

    
    text_input = dialogflow.types.TextInput(
        text=text, language_code=language_code)

    query_input = dialogflow.types.QueryInput(text=text_input)

    response = session_client.detect_intent(
        session=session, query_input=query_input)

    
    return response

#Debug Code - Final Commit without REST Integration - Cover API for Google Cloud API
        # print('=' * 20)
        # print('Query text: {}'.format(response.query_result.query_text))
        # print('Detected intent: {} (confidence: {})\n'.format(
        #     response.query_result.intent.display_name,
        #     response.query_result.intent_detection_confidence))
        # print('Fulfillment text: {}\n'.format(
        #     response.query_result.fulfillment_text))
# [END dialogflow_detect_intent_text]

# while(tempText != "quit"):
#     tempText = []
#     tempText.append(input())
#     #Temp Work Area
#     print("OUTPUT from API STARTS : \n")
#     detect_intent_texts(proj_id,tempSessionid,tempText,language)
#     print("\nOUTPUT ENDS")




