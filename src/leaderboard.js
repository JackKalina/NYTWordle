import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js";
import { getDatabase, ref, set, get, child, update } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-database.js";
import { firebaseConfig } from "./firebaseConfig.js";

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

// Get a reference to the database service
const database = getDatabase(app);

document.addEventListener("DOMContentLoaded", () => {

    let loadedData;

    const dbRef = ref(database);

    get(dbRef).then((snapshot) => {
        loadedData = snapshot.val();
        console.log(loadedData.todaysScores);
        loadTodaysLeaderboard();
    }).catch((error) => {
        console.log(error);
    })


    function loadTodaysLeaderboard(){
        let todayLeaderboard = document.querySelector("#today-leaderboard");

        Object.keys(loadedData.todaysScores).forEach(key => {
            if (key != "word_number") {
                console.log(loadedData.todaysScores[key].name);
                let nameDiv = document.createElement("div");
                nameDiv.classList.add("name");
                nameDiv.innerHTML = `${loadedData.todaysScores[key].name} ${loadedData.todaysScores[key].score}`;
                todayLeaderboard.appendChild(nameDiv);
                todayLeaderboard.appendChild(document.createElement("br"));
            }
        })


    }



});