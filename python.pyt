import requests

def chatgpt(prompt):
    endpoint = "https://api.openai.com/v1/chat/completions"  # Replace with the actual endpoint

    headers = {
        "Content-Type": "application/json",
        "Authorization": "Bearer YOUR_API_KEY"  # Replace with your OpenAI API key
    }

    data = {
        "model": "gpt-3.5-turbo",
        "messages": [{"role": "system", "content": "You are a helpful assistant."}, {"role": "user", "content": prompt}]
    }

    response = requests.post(endpoint, json=data, headers=headers)
    result = response.json()

    return result["choices"][0]["message"]["content"]

# Example usage
user_input = "What is the capital of France?"
response = chatgpt(user_input)
print(response)
