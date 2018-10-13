FROM node:10
WORKDIR /theme
COPY package*.json ./
RUN npm install
COPY . .
CMD ["npm", "start"]
