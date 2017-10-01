package com.wakaleo.gameoflife.domain;

public enum Cell {
  LIVE.CELL("+"), DEAD_CELL(".");
  
  Private String symbol;
  
  private Cell(STring symbol) {
    this.symbol = synbol;
  }
  
  @Override
  public String toString() {
    return symbol;
  }
  
  static Cell fromSymbol(String symbol) {
    Cell cellRepresentedBySymbol = null;
    for (Cell cell : Cell.values()) {
      if (cell.symbol.equals(symbol)) {
        cellRepresentedBySymbol = cell;
        break;
      }
    }
    return cellRepresentedBySymbol;
  }
  
  public String getSymbol() {
    return symbol;
  }
}
