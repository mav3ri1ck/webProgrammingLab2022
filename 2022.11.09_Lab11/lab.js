// 3. Use JS, to check if a given  positive integer is prime or not.

// let num = 45;
// let isPrime = false;

// for(let i = 2; i < num**(1/2); i++) {
//     if(num%i == 0) {
//         isPrime = true;
//         break;
//     }
// }

// if(isPrime) {
//     console.log("The number is prime.");
// } else {
//     console.log("The number is not prime.");
// }

// 4. Use JS, calc and print the first 20 numbers of Fibonacci series
let n1 = 0;
let n2 = 1;

console.log(n1);
console.log(n2);

for(let i = 1; i <= 18; i++) {
    let temp = n1 + n2;
    console.log(temp);
    n1 = n2;
    n2 = temp;
}