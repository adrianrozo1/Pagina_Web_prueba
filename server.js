import express from 'express';
import mysql from 'mysql2';
import cors from 'cors';

const app = express();
app.use(cors());

const db = mysql.createPool({
  host: 'mysql',
  user: 'camarasuser',
  password: 'PASSWORD',
  database: 'camarasdb'
});

app.get('/data', (req, res) => {
  db.query('SELECT * FROM camaras', (err, rows) => {
    if (err) return res.status(500).json(err);
    res.json(rows);
  });
});

app.listen(3000);
