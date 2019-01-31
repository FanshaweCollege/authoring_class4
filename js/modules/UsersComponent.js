export default {
    template:`
        <div>
            <h1>You're on the users page</h1>
            <p>{{ message }}</p>
        </div>
    `,

    data(){
        return{
            message: "on the user page component"
        }
    }
}