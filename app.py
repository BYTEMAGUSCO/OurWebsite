from flask import Flask, render_template, request, jsonify
from backend import handle_email_requests as handle

app = Flask(__name__)
app.config['SECRET_KEY'] = 'J1qfAkFHlx-cj_p4'

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/handle-email-requests', methods=['POST','GET'])
def handle_email_requests():
    data = handle.handle_email_request(request, app.config['SECRET_KEY'])
    return jsonify(data)

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000)