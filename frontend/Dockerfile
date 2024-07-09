FROM node:18-alpine

# Set working directory
WORKDIR /app

# Install dependencies
COPY ./* ./
RUN npm install

# Copy app
COPY . .

# Expose port and start app
EXPOSE 5173
CMD ["npm", "run", "dev"]
