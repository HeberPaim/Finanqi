FROM node:16

# Set working directory
WORKDIR /app

# Install dependencies
COPY package*.json ./
RUN npm install

# Copy app
COPY . .

# Expose port and start app
EXPOSE 5000
CMD ["npm", "run", "dev"]
