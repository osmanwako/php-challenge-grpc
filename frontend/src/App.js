import React, { useState } from 'react';
import { EchoRequest } from './echo_pb';
import { EchoServiceClient } from './echo_grpc_web_pb';

function App() {
  const [input, setInput] = useState('');
  const [response, setResponse] = useState('');

  const sendPing = () => {
    const client = new EchoServiceClient('http://localhost:8080');
    const request = new EchoRequest();
    request.setMessage(input);

    client.ping(request, {}, (err, res) => {
      if (err) return console.error(err);
      setResponse(res.getMessage());
    });
  };

  return (
    <div>
      <input value={input} onChange={(e) => setInput(e.target.value)} />
      <button onClick={sendPing}>Send</button>
      <p>Response: {response}</p>
    </div>
  );
}

export default App;
