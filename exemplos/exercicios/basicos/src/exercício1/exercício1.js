/**
 * CPW2 by Rodrigo Prestes Machado
 *
 * CPW2 is licensed under a
 * Creative Commons Attribution 4.0 International License.
 * You should have received a copy of the license along with this
 * work. If not, see <http://creativecommons.org/licenses/by/4.0/>.
 */

/**
 * Exercício 1:
 *
 * Crie um programa que solicite ao usuário seu nome, idade e profissão.
 * Em seguida, exiba uma mensagem de boas-vindas contendo essas informações.
 */

/**
 * Este exemplo foi criado por meio do módulo readline do Node.js. Disponível em:
 * https://nodejs.org/en/learn/command-line/accept-input-from-the-command-line-in-nodejs
 */
const readline = require('node:readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

rl.question(`What's your name? `, name => {

    rl.question(`How old are you? `, age => {

        rl.question(`What's your profession? `, profession => {
            console.log(`Hello, ${name}! You are ${age} years old and work as a ${profession}.`);
            rl.close();
        });

    });

});