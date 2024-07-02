import { Link } from "react-router-dom";
export default function Navbar() {
  return (
    <div>
      <nav>
        <ul className=" flex justify-between border-b">
          <div className="left">
            <h1 className=" text-3xl font-bold py-2 pl-5 sm:pl-20">Bloggie</h1>
          </div>
          <div className="right flex text-sm mr-5 sm:mr-20 items-center">
            <Link to={"/sign-in"}>
              <button className=" font-light px-3">Sign in</button>
            </Link>{" "}
            <Link to={"/sign-up"}>
              <button className=" font-light bg-black rounded-full py-2 my-2 text-white px-4">
                Get Started
              </button>
            </Link>
          </div>
        </ul>
      </nav>
    </div>
  );
}
