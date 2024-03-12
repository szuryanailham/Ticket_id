import { Link } from "@inertiajs/react";
import React from "react";
function ConcertCard({ concerts }) {
    return (
        <div className="m-10">
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
