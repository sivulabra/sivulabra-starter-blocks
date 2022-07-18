wp.blocks.registerBlockType( "sivulabra/cart", {
  title: "Ostoskorin sisältö",
  category: 'sivulabra',
  supports: {
    align: ["full"],
  },
  edit: function() {
    return wp.element.createElement(
      "div",
      {
        className: "placeholder-block"
      },
      "Ostoskorin sisältö"
    )
  },
  save: function() {
    return null;
  }
} )