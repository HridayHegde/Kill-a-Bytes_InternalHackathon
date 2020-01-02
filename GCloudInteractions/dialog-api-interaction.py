import os
os.environ["GOOGLE_APPLICATION_CREDENTIALS"]=".\GCloudCredentials\credentials.json"
import json
import dialogflow_v2 as dialogflow

import argparse
import uuid


#Variables
tempSessionid = "DarkArcane"
tempText = []
global proj_id
proj_id = "kil-a-bytes-acaxis"
language = "en-US"

#JSON Parsing
#with open('./GCloudCredentials/credentials.json') as json_file:
   # data = json.load(json_file)
    #proj_id = data['project_id']

#GAPI Interaction


# [START dialogflow_detect_intent_text]
def detect_intent_texts(project_id, session_id, texts, language_code):
    
    session_client = dialogflow.SessionsClient()

    session = session_client.session_path(project_id, session_id)
    print('Session path: {}\n'.format(session))

    for text in texts:
        text_input = dialogflow.types.TextInput(
            text=text, language_code=language_code)

        query_input = dialogflow.types.QueryInput(text=text_input)

        response = session_client.detect_intent(
            session=session, query_input=query_input)
        print(response)

#Debug Code - Final Commit without REST Integration - Cover API for Google Cloud API
        # print('=' * 20)
        # print('Query text: {}'.format(response.query_result.query_text))
        # print('Detected intent: {} (confidence: {})\n'.format(
        #     response.query_result.intent.display_name,
        #     response.query_result.intent_detection_confidence))
        # print('Fulfillment text: {}\n'.format(
        #     response.query_result.fulfillment_text))
# [END dialogflow_detect_intent_text]



#Temp Work Area
# print("OUTPUT from API STARTS : \n")
# detect_intent_texts(proj_id,tempSessionid,tempText,language)
# print("\nOUTPUT ENDS")




