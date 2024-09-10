from flask import Flask, render_template, request , jsonify

def handle_email_request():
    return {
        "message":"Email Sent!"
    }