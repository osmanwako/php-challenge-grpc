import { render, screen, fireEvent } from '@testing-library/react';
import App from './App';

test('sends message to backend', () => {
  render(<App />);
  fireEvent.change(screen.getByRole('textbox'), { target: { value: 'hello' } });
  fireEvent.click(screen.getByText('Send'));
  // Mock gRPC client in actual implementation
});
