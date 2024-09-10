from flask import Flask, render_template, request , jsonify
import jwt
from datetime import datetime, timedelta
import requests

def create_token(sender_email, secret_key):
    token = jwt.encode({
        'user': sender_email,
        'expiration': str(datetime.utcnow() + timedelta(seconds=120))
            }, secret_key, algorithm='HS256')
    return token

def handle_email_request(request, secret_key):
    
    url = "http://127.0.0.1:5001/send-email";
    
    data = request.get_json()
    sender_name = data.get('sender_name')
    sender_email = data.get('sender_email')
    sender_phone_no = data.get('sender_phone_no')
    sender_service_interested = data.get('sender_service_interested')
    sender_body = data.get('sender_body')    
    token = create_token(sender_email=sender_email, secret_key=secret_key)
    
    email_data = {
        "sender_name":sender_name,
        "sender_email":sender_email,
        "sender_phone_no": sender_phone_no,
        "sender_service_interested":sender_service_interested,
        "sender_body":sender_body
    }
    
    response = requests.post(url=url, json=email_data, headers={
        'Authorization': f'Bearer {token}',
        'Content-Type': 'application/json'
    })
    
    
    return response.json()