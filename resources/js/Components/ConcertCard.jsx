import { Link, useForm } from "@inertiajs/react";
import React, { useEffect, useState } from "react";
function ConcertCard({ concerts }) {
    const { data, setData, post, processing, errors } = useForm({
        concert: "",
        country: "",
        date_time: "",
    });
    const onHandleChange = (event) => {
        setData(event.target.name, event.target.value);
    };

    const HandleSubmit = (event) => {
        event.preventDefault();
        post("/search", {
            onSuccess: () => {
                console.log("sukses bang");
            },
            onError: (errors) => {
                console.log(errors);
            },
        });
    };
    return (
        <div className="m-10">
            {/* SEARCH */}
            <form
                onSubmit={HandleSubmit}
                className="w-full mx-auto mb-5 gap-3 flex flex-row justify-center "
            >
                {/* name of concert */}
                <div>
                    <select
                        name="concert"
                        id="countries"
                        className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                        onChange={(e) => onHandleChange(e)}
                    >
                        <option value="" disabled selected>
                            Search Event
                        </option>
                        {concerts.data.map((concert) => (
                            <option id={concert.id} value={concert.title}>
                                {concert.title}
                            </option>
                        ))}
                    </select>
                </div>
                {/* and name of concert */}
                <div>
                    {/* name country */}
                    <select
                        id="countries"
                        name="country"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                        onChange={(e) => onHandleChange(e)}
                    >
                        <option selected>Choose a country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                {/* last name country */}
                <div>
                    <select
                        id="date_time"
                        name="date_time"
                        className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                        onChange={(e) => onHandleChange(e)}
                    >
                        <option value="" disabled selected>
                            Search Event
                        </option>
                        {concerts.data.map((concert) => (
                            <option id={concert.id} value={concert.date_time}>
                                {concert.date_time}
                            </option>
                        ))}
                    </select>
                </div>
                <button
                    name="search"
                    type="submit"
                    class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                >
                    <svg
                        class="w-4 h-4"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 20 20"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                        />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
            {/* AND SEARCH */}
            {concerts.data.map((concert) => {
                return (
                    <h1 key={concert.id}>
                        <Link href={`/concert/${concert.Slug}`}>
                            {concert.title}
                        </Link>
                    </h1>
                );
            })}
        </div>
    );
}

export default ConcertCard;
