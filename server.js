import express from 'express';
import mysql from 'mysql2';
import cors from 'cors';

const app = express();
app.use(cors());

app.get('/data', (req, res) => {
  res.json({ mensaje: "API funcionando" });
});

app.listen(3000, () => {
  console.log('API corriendo en puerto 3000');
});
